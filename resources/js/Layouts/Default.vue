<template>
  <div class="min-h-screen bg-gray-100">
    <Navigation></Navigation>
    <!-- Page Heading -->
    <Header>
      <slot name="header">{{ pageTitle }}</slot>
    </Header>

    <!-- Page Content -->
    <main>
      <slot></slot>
    </main>

    <!-- Modal Portal -->
    <portal-target name="modal" multiple> </portal-target>
  </div>
</template>
<script>
import JetApplicationMark from "@/Jetstream/ApplicationMark";
import JetDropdown from "@/Jetstream/Dropdown";
import JetDropdownLink from "@/Jetstream/DropdownLink";
import JetNavLink from "@/Jetstream/NavLink";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink";
import Navigation from "@/Components/Navigation";
import Header from "@/Components/Header";

export default {
  props: {
    pageTitle: {
      type: String,
      default: "empty",
    },
  },
  components: {
    JetApplicationMark,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    JetResponsiveNavLink,
    Navigation,
    Header,
  },

  data() {
    return {
      showingNavigationDropdown: false,
      pageTitle: "",
    };
  },

  methods: {
    logout() {
      axios.post(route("logout").url()).then((response) => {
        window.location = "/";
      });
    },
  },
};
</script>
