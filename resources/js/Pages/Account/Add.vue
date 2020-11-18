<template>
  <default-layout pageTitle="Add new Account to your Collection">
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <new-edit-form></new-edit-form>
        </div>
      </div>
    </div>
  </default-layout>
</template>

<script>
import DefaultLayout from "@/Layouts/Default";
import NewEditForm from "@/Components/Account/NewEditForm";

export default {
  components: {
    DefaultLayout,
    NewEditForm
  },
};
</script>
