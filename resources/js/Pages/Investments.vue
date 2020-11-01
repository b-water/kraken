<template>
  <default-layout pageTitle="Overview of your Investments">
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
import DefaultLayout from "@/Layouts/Default";
import InvestmentCollection from "@/Components/Investment/Collection.vue";

export default {
  components: {
    DefaultLayout,
    InvestmentCollection,
  },
};
</script>
