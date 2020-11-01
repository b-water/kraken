<template>
  <button :type="type" class="btn btn-indigo btn-indigo-thicc">
    <slot></slot>
  </button>
</template>
<script>
export default {
  props: {
    type: {
      type: String,
      default: "submit",
    },
    color: {
      type: String,
      default: "",
    },
  },
};
</script>