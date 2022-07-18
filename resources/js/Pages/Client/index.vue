<script >
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';

import ListVue from '../../Componants/List.vue';

export default {
  components: {
    AppLayout,
    
    ListVue
},
  props: {
    clients: Array,
  },
}
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
           <h2   class="font-semibold text-xl text-gray-800 leading-tight">
              
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <ListVue :clients="clients"/>
            </div>
        </div>
        
    </AppLayout>
</template>

