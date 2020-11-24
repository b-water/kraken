<template>
    <form class="w-full" method="POST" enctype="multipart/form-data">
        <div class="grid grid-cols-1 p-2 gap-3">
            <div class="col-span-10">
                <div class="w-full">
                    <div class="bg-indigo-500 text-white relative">
                        <input type="file" ref="excel" multiple class="cursor-pointer relative block opacity-0 w-full h-full p-10 z-50" v-on:change="handle()">
                        <div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
                            <h4>
                                Select or drop your Finanzguru Excel (.xlsx) file here
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        methods: {
            handle(){
                this.file = this.$refs.excel.files[0];
                var data = new FormData()
                data.append('excel', this.file || [])
                this.$inertia.post('/accounts/import/finanzguru', data)
            },
        },
        data() {
            return {
                file: null
            }
        }
    }
</script>
