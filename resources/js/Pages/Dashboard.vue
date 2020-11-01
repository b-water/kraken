<template>
  <default-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <welcome />
        </div>
      </div>
    </div>
  </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    DefaultLayout,
    Welcome,
  },
};
</script>
