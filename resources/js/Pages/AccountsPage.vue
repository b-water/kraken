<template>
  <default-layout pageTitle="Overview of your Accounts">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <account-collection :accounts="accounts"/>
        </div>
      </div>
    </div>
  </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/Default";
import AccountCollection from "@/Components/Account/Collection";
import Header from "@/Components/Header";

export default {
  props: {
      accounts: {
          type: Array,
          default: {}
      }
  },
  components: {
    DefaultLayout,
    AccountCollection,
    Header,
  },
};
</script>
