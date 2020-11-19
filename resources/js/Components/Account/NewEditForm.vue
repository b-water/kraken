<template>
    <form class="w-full" method="POST">
        <div class="grid grid-cols-10 p-2 gap-3">
            <div class="col-span-5">
                <app-input-text name="name" label="Name" placeholder="Name of your Account" v-model="form.name"></app-input-text>
                <app-input-text name="reference" label="Reference" placeholder="IBAN or Credit Card Number" v-model="form.reference"></app-input-text>
            </div>
            <div class="col-span-5">
                <app-select name="currency" label="Currency" v-model="form.currency" :options="currencies"></app-select>
                <app-select name="accountType" label="Type" v-model="form.accountType" :options="accountTypes"></app-select>
            </div>
        </div>
        <div class="grid grid-cols-10 overflow-hidden h-auto">
            <div class="col-span-9"></div>
            <div class="col-span1">
                <div class="relative mr-2 mb-15">
                    <div class="absolute right-0 top-0">
                        <button type="button" class="btn btn-indigo" @click="save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import AppSelect from "@/Components/Control/Select";
    import AppInputText from "@/Components/Control/InputText";

    export default {
        components: {
            AppInputText,
            AppSelect
        },
        methods: {
            save() {
                this.$inertia.post('/accounts/add', this.form);
            },
        },
        data() {
            return {
                form: {
                    name: '',
                    symbol: '',
                    reference: '',
                    type: '',
                    currency: ''
                },
                currencies: [
                    { value: 'EUR', text: 'Euro' },
                    { value: 'USD', text: 'Dollar' },
                    { value: 'DLL', text: 'Hong-Kong Dollar', disabled: true }
                ],
                accountTypes: [
                    { value: 1, text: 'Basic' },
                    { value: 2, text: 'Savings' },
                    { value: 3, text: '', disabled: true }
                ]
            }
        }
    }
</script>
