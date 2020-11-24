<template>
  <default-layout pageTitle="Import your Transactions from Finanzguru">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <import />
        </div>
      </div>
    </div>
  </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/Default";
import Import from "@/Components/Account/Import";

export default {
  components: {
    DefaultLayout,
    Import
  },
};
</script>
