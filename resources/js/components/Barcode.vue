<template>
    <div class="alert alert-success" role="alert">
        <svg class="barcode"
        jsbarcode-format="upc"
        :jsbarcode-value="body"
        jsbarcode-textmargin="0"
        jsbarcode-fontoptions="bold">
        </svg>
    </div>
</template>

<script>
    export default {
        props: ['message'],
        data() {
            return {
                body: this.message
            }
        },
        mounted() {
            JsBarcode(".barcode").init();
        },
        methods: {

        }
    }
</script>

<style>
    .alert-flash {
        position: fixed;
        right: 25px;
        bottom: 25px;
    }
</style>
