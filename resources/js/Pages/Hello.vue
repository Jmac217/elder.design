<template>
<div class="flex space-x-10 min-h-screen justify-center items-center bg-red-500">
    <div class="grid gap-4 grid-cols-4">
        <div
            v-for="(message, index) in messages"
            :key="index"
            class="flex-wrap bg-white p-4 m-4 rounded shadow"
        >
        <barcode :message="message.text" />
        </div>
    </div>
    <div>
        <h1 class="text-5xl text-red-300 text-center">Casey's</h1>
        <h2 class="text-3xl font-extrabold mb-12 text-red-100 text-center">UPC DB POC</h2>
        <form @submit.prevent="submit">
            <input type="text" v-model="form.text" rows="8" placeholder="Barcode" class="hadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
            <div>
                <div v-if="errors.text">{{ errors.text }}</div>
                <button type="submit" class="w-full bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded">add a Barcode</button>
            </div>
        </form>
    </div>
</div>
</template>
<style>
h1{font-family:Laguna-Hills;}
</style>
<script>
export default {
    props: {
        messages: Array,
        errors: Object
    },
    data() {
        return {
            form: { text: "" }
        }
    },
    methods: {
        submit(){
            // send data to backend
            this.$inertia.post('/messages', this.form)
        }
    }
};
</script>
