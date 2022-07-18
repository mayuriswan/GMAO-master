<template>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0 mt-5 ml-5">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
          <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form @submit.prevent="updateClient">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-sm font-medium text-gray-700">NOM</label>
                  <input type="text" v-model="form.nom" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-sm font-medium text-gray-700">MTVA</label>
                  <input type="text"  v-model="form.mtva" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" v-model="form.email" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">EmailSs address</label>
                  <input type="text" v-model="form.emailSs" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="email-address" class="block text-sm font-medium text-gray-700">EmailFact address</label>
                  <input type="text" v-model="form.emailFact" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

               

                <div class="col-span-3">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                  <input type="text" v-model="form.adresse" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>
                <div class="col-span-3">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">Street addressSs</label>
                  <input type="text" v-model="form.adresseSs"  id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>
                 <div class="col-span-6">
                  <label for="street-address" class="block text-sm font-medium text-gray-700">observation</label>
                  <input type="text" v-model="form.observation"  id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                  <label for="city" class="block text-sm font-medium text-gray-700">PHONE</label>
                  <input type="text" v-model="form.tele" id="city" autocomplete="address-level2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                  <label for="region" class="block text-sm font-medium text-gray-700">SItenternet</label>
                  <input type="text" v-model="form.siteInternet" id="region" autocomplete="address-level1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                </div>

                
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  
</template>
<!-- <script>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'


export default {
  setup () {
    const form = reactive({
      nom: null,
      mtva: null,
      email: null,
      emailSs:null,
      emailFact:null,
      adresse:null,
      adresseSs:null,
      tele:null,
      observation:null,
      siteInternet:null,

    })

    function save() {
      Inertia.post('/clients', form)
    }

    return { form, save }
  },
}
</script> -->
<script setup>
import { useForm } from '@inertiajs/inertia-vue3'
import { defineProps } from 'vue'
import { Inertia } from '@inertiajs/inertia';


    const props = defineProps({
        client:Object,
    });
    const form = useForm({
      nom: props.client.nom ,
      mtva:  props.client.mtva,
      email:  props.client.email,
      emailSs: props.client.emailSs,
      emailFact: props.client.emailFact,
      adresse: props.client.adresse,
      adresseSs: props.client.adresseSs,
      tele: props.client.tele,
      observation: props.client.observation,
      siteInternet: props.client.siteInternet,

    });
   
   function updateClient(){
    Inertia.post(  `/clients/${props.client.id}`,{
        _method:'put',
         nom: form.nom ,
      mtva:  form.mtva, 
      email:  form.email,
      emailSs: form.emailSs,
      emailFact: form.emailFact,
      adresse: form.adresse,
      adresseSs: form.adresseSs,
      tele: form.tele,
      observation: form.observation,
      siteInternet: form.siteInternet,

    })
   }
  
  

</script>