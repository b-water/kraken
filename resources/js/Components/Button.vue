<template>
  <button
    :type="type"
    class="btn"
    v-bind:class="[
      {
        'btn-disabled': disabled,
      },
      {
        'btn-thicc': thicc,
      },
      {
        'btn-blue': color === 'blue' ? true : false,
        'btn-indigo': color === 'indigo' ? true : false,
        'btn-teal': color === 'teal' ? true : false,
      },
    ]"
  >
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
      default: "indigo",
    },
    disabled: {
      type: Boolean,
      default: false,
    },
    thicc: {
      type: Boolean,
      default: false,
    },
  },
};
</script>