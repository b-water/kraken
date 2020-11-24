<template>
    <div>
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="grid grid-cols-10">
                <div class="col-span-1">
                    <inertia-link href="accounts/import/finanzguru">
                        <button type="button" class="btn btn-blue">Import Finanzguru</button>
                    </inertia-link>
                </div>
                <div class="col-span-8"></div>
                <div class="col-span-1">
                    <inertia-link href="accounts/add">
                        <app-button>
                            Add Account
                        </app-button>
                    </inertia-link>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1">
            <div v-for="account in accounts" :key="account.id">
                <div>{{ account.name }}</div>
                <div>{{ account.reference }}</div>
                <div>{{ account.currency }}</div>
                <div>{{ account.type }}</div>
            </div>
        </div>
    </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo";
import JetNavLink from "@/Jetstream/NavLink";
import AppButton from "@/Components/Control/Button";

export default {
    props: {
        accounts: {
            type: Array,
            default: {}
        }
    },
    components: {
        JetApplicationLogo,
        JetNavLink,
        AppButton
    },
};
</script>
