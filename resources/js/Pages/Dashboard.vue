<template>
  <default-layout>
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
import DefaultLayout from "@/Layouts/Default";
import Welcome from "@/Jetstream/Welcome";

export default {
  components: {
    DefaultLayout,
    Welcome,
  },
};
</script>
