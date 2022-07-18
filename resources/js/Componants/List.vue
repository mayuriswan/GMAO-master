<script>

import { Link } from '@inertiajs/inertia-vue3'
import ButtonVue from '../Jetstream/Button.vue';
import { Inertia } from "@inertiajs/inertia";


function destroy(id) {
    if (confirm("Are you sure you want to Delete")) {
        Inertia.delete(route('clients.destroy', id));
    }
}

const people = [
  {
    name: 'Jane Cooper',
    title: 'Regional Paradigm Technician',
    department: 'Optimization',
    role: 'Admin',
    email: 'jane.cooper@example.com',
    image:
      'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
  },
  // More people...
]
 
export default {
  components :{
    Link,
    ButtonVue,
  },
  props:['clients'],
  methods:{
    destroy,
  }
}
</script>
<template>
  <div class="flex flex-col">
    <Link :href="route('clients.create')">
      <div class=" justify-right mb-5 float-right">
      <button
        type="button"
        
        data-mdb-ripple="true"
        data-mdb-ripple-color="light"
        class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
      >Add Client</button>
    </div>
    </Link>
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">tele</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
             
              <tr v-for="person in clients" :key="person.id">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        {{ person.nom}}
                      </div>
                      <div class="text-sm text-gray-500">
                        {{ person.email }}
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">{{ person.tele }}</div>
                 
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Active </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                 {{ person.adresse }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                  
                  
                  <Link :href="route('clients.show',person.id)" class="text-indigo-600 hover:text-indigo-900 pr-4">Show</Link>
                  <Link :href="route('clients.edit',person.id)" class="text-green-600 hover:text-indigo-900 pr-4">Edit</Link>
               
                       <button @click="destroy(person.id)" class="text-red-600 hover:text-indigo-900 pr-4 bg-transparent mx-0">delete</button>
                 
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

