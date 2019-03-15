<template>
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Create new quotations</h3>
            <div class="row">
                <div class="col col-md-12">
                    <form @submit.prevent="submit" enctype="multipart/form-data">
                         <div :class="['form-group', {'is-invalid': $v.client.$error}]">
                            <div>
                                <label class="section-semi-title">Select client</label>
                                <span v-if="!$v.client.required" class="invalid-feedback">
                                    Client is required
                                </span>
                                <multiselect v-model="client" track-by="id" label="name" placeholder="Select one" :options="clients" :searchable="true" :allow-empty="true" required>
                                    <template slot="singleLabel" slot-scope="{ option }"><strong>{{ option.name }}</strong></template>
                                </multiselect>
                                <pre class="language-json" v-if="client"><code style="background-color:transparent;">{{ client  }}</code></pre>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col col-md-6">
                                    <label class="section-semi-title">Upload quotation files</label>
                                    <vue-dropzone
                                        id="dropzone"
                                        ref="myVueDropzone"
                                        v-model="quotationFiles"
                                        :options="dropzoneOptions"
                                    />
                                </div>
                                <div class="col col-md-6">
                                    <label class="section-semi-title">Upload secure files</label>
                                    <vue-dropzone
                                        id="dropzone"
                                        ref="myVueDropzone"
                                        :options="dropzoneOptions"
                                    />
                                </div>
                            </div>
                        </div>
                        <hr>
  
                        <div :class="['form-group', {'is-invalid': $v.email.$error}]">
                            <label class="section-semi-title">Send mail to</label>
                            <input
                                class="form-control"
                                :class="{ 'is-invalid': $v.email.$error }"
                                v-model.trim="email"
                                placeholder="Enter Email"
                                type="email"
                                id="email"
                            >
                            <span v-if="!$v.email.required" class="invalid-feedback">
                                Email is required
                            </span>
                            <span v-if="!$v.email.email" class="invalid-feedback">
                                Email is invalid
                            </span>
              
                        </div>

                        <div class="form-group">
                            <label class="label" for="subject">Subject</label>
                            <input
                                class="form-control"
                                :class="{ 'is-invalid': $v.subject.$error }"
                                v-model.trim="subject"
                                placeholder="Enter subject"
                                type="text"
                                id="subject"
                            >
                            <span v-if="!$v.subject.required" class="invalid-feedback">
                                Subject is required
                            </span>
                            <span v-if="!$v.subject.maxLength" class="invalid-feedback">
                                Subject must have at most {{$v.lastname.$params.maxLength.max}} letters.                
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <label class="label" for="message">Message</label>

                            <textarea
                                id="message" 
                                class="form-control"
                                :class="{ 'is-invalid': $v.subject.$error }"
                                v-model.trim="message" 
                                placeholder="message"
                            >
                            </textarea>
                            <span v-if="!$v.message.required" class="invalid-feedback">
                                Message is required
                            </span>
                            <span v-if="!$v.message.maxLength" class="invalid-feedback">
                                Subject must have at most {{$v.lastname.$params.maxLength.max}} letters.                
                            </span>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" v-on:click="submit">Create</button>
                        </div>
                        <p class="submission" v-if="submitStatus === 'ERROR'">Please fill the form correctly.</p>
                        <p class="submission" v-if="submitStatus === 'OK'">Succesfull added client</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

//https://vue-multiselect.js.org/
import Multiselect from 'vue-multiselect'
import vue2Dropzone from 'vue2-dropzone'
import { required, minLength, maxLength, between, email, integer, numeric } from 'vuelidate/lib/validators'
import axios from "axios";

export default {
  components: { 
      Multiselect,
      vueDropzone: vue2Dropzone
    },
  data() {
    return {
        email: null,
        subject: null,
        message: null,
        selected: null,
        quotation: null,
        client: null,
        clients:[],
        quotationFiles: null,
        quotationSecureFiles: null,
        submitStatus: null,
        dropzoneOptions: {
            url: '/admin/quotations/file/create',
            maxFilesize: 0.5,
            addRemoveLinks: true,
            dictCancelUpload: 'Cancel File',
            dictDefaultMessage: "<i class='icon-fa icon-fa-cloud-upload'/></i> Uploads Your File's Here",
            headers: { 'My-Awesome-Header': 'header value' }
        },

    }
  },
  validations: {
    client: {
        required,
    },
    email: {
        required,
        email
    },
    subject: {
        required,
        maxLength: maxLength(120)
    },
    message: {
        required,
        maxLength: maxLength(400)
    }

  },
  methods: {
    submit() {
        this.$v.$touch()

        if (this.$v.$invalid) {
            this.submitStatus = 'ERROR'
        } else {
            let client_id = this.client.id
            let client_email = this.client.email
            let url = '/api/admin/quotations/create'
            axios.post(url, {
                client_id,
                client_email,
                email,
                subject,
                message,

            })
            .then(function (response) {
                succesMsg = response.data.message
            })
            .catch(function (error) {
              
            });
            this.submitStatus = 'PENDING'
            setTimeout(() => {
                this.submitStatus = 'OK'
            }, 500)
        }
    },

    async getClients () {
      let response = await window.axios.get('/api/admin/clients/all')

      this.clients = response.data

    },
  },

  mounted() {
    this.getClients()
  }
}
</script>

<!-- SASS styling -->
<style lang="scss">
    .manual-demo .dz-image img {
        width: auto !important;
        height: auto !important;
        object-fit: fill !important;
    }

  .dropbox {
    outline: 2px dashed grey; /* the dash box */
    outline-offset: -10px;
    background: lightcyan;
    color: dimgray;
    padding: 10px 10px;
    min-height: 200px; /* minimum height */
    position: relative;
    cursor: pointer;
  }

  .input-file {
    opacity: 0; /* invisible but it's there! */
    width: 100%;
    height: 200px;
    position: absolute;
    cursor: pointer;
  }

  .dropbox:hover {
    background: lightblue; /* when mouse over to the drop zone, change color */
  }

  .dropbox p {
    font-size: 1.2em;
    text-align: center;
    padding: 50px 0;
  }
</style>
