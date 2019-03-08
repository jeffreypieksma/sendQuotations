<template>
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Create new client</h3>
            <div class="row">
                <div class="col-md-6 col-s-12">
                    <form>
                        <div class="form-group" :class="{ 'has-error': $v.firstname.$error }">
                            <label for="name">Firstname</label>
                            <input type="text" class="form-control" id="name" placeholder="firstname" v-model="firstname">
                            <div class="error" v-if="!$v.firstname.required">Field is required</div>
                            <div class="error" v-if="!$v.firstname.maxLength">Firstname must have at most {{$v.firstname.$params.maxLength.max}} letters.</div>
                        </div>
                        <div class="form-group" :class="{ 'has-error': $v.lastname.$error }">
                            <label for="name">Lastname</label>
                            <input type="text" class="form-control" id="name" placeholder="Lastname" v-model="lastname">
                            <div class="error" v-if="!$v.lastname.required">Field is required</div>
                            <div class="error" v-if="!$v.lastname.maxLength">Lastname must have at most {{$v.lastname.$params.maxLength.max}} letters.</div>
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
                        <p class="submission" v-if="submitStatus === 'ERROR'">Please fill the form correctly.</p>
                        <p class="submission" v-if="submitStatus === 'OK'">Succesfull added client</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Tabs, Tab } from 'vue-tabs-component'
import { required, minLength, maxLength, between, email } from 'vuelidate/lib/validators'
import axios from "axios";

export default {
  components: {
    'tabs': Tabs,
    'tab': Tab
  },
  data() {
    return {
        firstname: null,
        lastname: null,
        email: null,
        submitStatus: null
    }
  },
  validations: {
    firstname: {
      required,
       maxLength: maxLength(100)
    },
     lastname: {
      required,
      maxLength: maxLength(100)
    },
    email: {
      required,
      email
    }
  },
  methods: {
    submit() {
        this.$v.$touch()
        let succesMsg = this;

        if (this.$v.$invalid) {
            this.submitStatus = 'ERROR'
        } else {
            let url = '/api/admin/clients/create'
            axios.post(url, {
                firstname: this.firstname,
                lastname: this.lastname,
                email: this.email
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
    }
  },

  mounted() {
  

  }
}
</script>
