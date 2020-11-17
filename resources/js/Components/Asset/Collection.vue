<template>
    <div>
        <div class="p-6 bg-white border-b border-gray-200">
            <div class="grid grid-cols-10">
                <div class="col-span-9">
                </div>
                <div class="col-span-1">
                    <inertia-link href="assets/add">
                        <app-button>
                            Add Asset
                        </app-button>
                    </inertia-link>
                </div>
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25">
            <div class="grid grid-cols-10 gap-1">
                <div class="col-span-6 bg-green-300 p-4">
                    <div class="px-3 py-2 rounded-md text-sm font-medium text-white bg-green-500 focus:outline-none focus:text-white focus:bg-green-700">
                        FTSE All-World
                    </div>
                </div>
                <div class="col-span-1 bg-yellow-300 p-4">DEvelopeed Markets</div>
                <div class="col-span-2 bg-red-300 p-4">STOXX Global Select Dividend</div>
                <div class="col-span-1 bg-gray-300 p-4">iShares MSCI World</div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'
    import JetNavLink from '@/Jetstream/NavLink'
    import AppButton from "@/Components/Control/Button";

    export default {
        components: {
            AppButton,
            JetApplicationLogo,
            JetNavLink
        },
    }
</script>
