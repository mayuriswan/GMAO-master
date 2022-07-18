<script >
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import ShowClientVue from '../../Componants/ShowClient.vue';
export default {
  components: {
    AppLayout,
    
    ShowClientVue
},
  props: {
    client:Object,
  },
}
</script>

<template>
     <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               Show Client
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   <ShowClientVue :client = "client"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
