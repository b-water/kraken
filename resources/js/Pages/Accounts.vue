<template>
  <default-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Collection
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <investment-collection />
        </div>
      </div>
    </div>
  </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout";
import AccountCollection from "@/Components/Account/Collection.vue";

export default {
  components: {
    DefaultLayout,
    AccountCollection,
  },
};
</script>
