<template>
<div class="flex space-x-10 min-h-screen justify-center items-center bg-blue-500">
    <div>
        <div
            v-for="(message, index) in messages"
            :key="index"
            class="bg-white p-8 mb-4 rounded shadow"
        >
        <barcode :message="message.text" />
        </div>
    </div>
    <div>
        <h2 class="text-3xl font-extrabold mb-12 text-blue-100">Barcode Database</h2>
        <form @submit.prevent="submit">
            <input type="text" v-model="form.text" rows="8" placeholder="Barcode" class="hadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></input>
            <div>
                <div v-if="errors.text">{{ errors.text }}</div>
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">add a Barcode</button>
            </div>
        </form>
    </div>
</div>
</template>

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
