<template>
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Create new quotations</h3>
            <div class="row">
                <div class="col col-md-12">
                    <form>
                        <div class="form-group">
                            <div>
                                <label class="section-semi-title">Select client</label>
                                <multiselect v-model="value" track-by="id" label="name" placeholder="Select one" :options="clients" :searchable="true" :allow-empty="false">
                                    <template slot="singleLabel" slot-scope="{ option }"><strong>{{ option.name }}</strong></template>
                                </multiselect>
                                <pre class="language-json" v-if="value"><code style="background-color:transparent;">{{ value  }}</code></pre>
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
                        <div class="form-group">
                            <label class="label" for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" v-model="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" v-model="subject" placeholder="Subject" />
                        </div>
                        
                        <div class="form-group">
                            <label class="label" for="message">Message</label>
    
                            <textarea id="message" class="form-control" v-model="message" placeholder="message">

                            </textarea>
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
import { required, minLength, maxLength, between, email } from 'vuelidate/lib/validators'
import axios from "axios";

export default {
  components: { 
      Multiselect,
      vueDropzone: vue2Dropzone
    },
  data() {
    return {
        clients: null,
        selected: null,
        value: null,
        dropzoneOptions: {
            url: 'https://httpbin.org/post',
            maxFilesize: 0.5,
            addRemoveLinks: true,
            dictCancelUpload: 'Cancel File',
            dictDefaultMessage: "<i class='icon-fa icon-fa-cloud-upload'/></i> Uploads Your File's Here",
            headers: { 'My-Awesome-Header': 'header value' }
        },
      count: 1,
      submitStatus: null
    }
  },
  validations: {
    client: {
      required
    },
    files: {
      required
    },
    mailto: {
        required
    },
    subject: {
        required
    },
    message: {
        required
    }

  },
  methods: {
    submit() {
        this.$v.$touch()
        let succesMsg = this;

        if (this.$v.$invalid) {
            this.submitStatus = 'ERROR'
        } else {
            let url = '/api/admin/quotations/create'
            axios.post(url, {
               
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
    AddFile () {
        let file = { size: 123, name: 'Icon' }
        let url = '/assets/img/demo/gallery/' + this.count + '.jpg'
        this.$refs.myVueDropzone.manuallyAddFile(file, url)
        if (this.count !== 12) {
            this.count = this.count + 1
        } else {
            this.count = 12
        }
    },
    async getClients () {
      let response = await window.axios.get('/api/admin/clients/all')

      this.clients = response.data

      console.log(this.clients)

    },
  },

  mounted() {
    this.getClients()
  }
}
</script>

<style>
  .manual-demo .dz-image img {
    width: auto !important;
    height: auto !important;
    object-fit: fill !important;
  }
</style>
