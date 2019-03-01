<template>
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Create new client</h3>
            <div class="row">
                <div class="col-md-6 col-s-12">
                    <form>
                        <div class="form-group" :class="{ 'has-error': $v.name.$error }">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" v-model="name">
                            <div class="error" v-if="!$v.name.required">Field is required</div>
                        </div>
                        <div class="form-group" :class="{ 'has-error': $v.email.$error }">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email" v-model="email">
                            <div class="error" v-if="!$v.email.required">Field is required</div>
                            <div class="error" v-if="!$v.email.email">Invalid email</div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" v-on:click="submit">Create</button>
                        </div>
                        <p class="submission" v-if="submitStatus === 'OK'">Thanks for your submission!</p>
                        <p class="submission" v-if="submitStatus === 'ERROR'">Please fill the form correctly.</p>
                        <p class="submission" v-if="submitStatus === 'PENDING'">Sending...</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Tabs, Tab } from 'vue-tabs-component'
import { required, minLength, between, email } from 'vuelidate/lib/validators'
import axios from "axios";

export default {
  components: {
    'tabs': Tabs,
    'tab': Tab
  },
  data() {
    return {
      name: '',
      email: '',
      submitStatus: null,
      formSubmit: false
    }
  },
  validations: {
    name: {
      required
    },
    email: {
      required,
      email
    }
  },
  methods: {
      submit() {
        this.formSubmit = true
        this.$v.$touch()
        if (this.$v.$invalid) {
            this.submitStatus = 'ERROR'
        } else {
            axios.post('/api/client', {
                name: this.name,
                email: this.email
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });

            this.submitStatus = 'PENDING'
            setTimeout(() => {
                this.submitStatus = 'OK'
            }, 500)
        }
    }
  },

  mounted() {
  

  }
}
</script>
