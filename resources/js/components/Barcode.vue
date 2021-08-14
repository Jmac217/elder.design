<template>
    <div class="alert alert-success" role="alert">
        <svg
            class="barcode"
            jsbarcode-format="upce"
            jsbarcode-width="2"
            jsbarcode-height="50"
            jsbarcode-displayvalue="true"
            :jsbarcode-text="body"
            jsbarcode-fontoptions="bold"
            :jsbarcode-value="body"
            jsbarcode-font="monospace"
            jsbarcode-textalign="center"
            jsbarcode-textposition="bottom"
            jsbarcode-textmargin="5"
            jsbarcode-fontsize="20"
            jsbarcode-background="#ffffff"
            jsbarcode-linecolor="#000000"
            jsbarcode-margin="10"
            jsbarcode-margintop="20"
            jsbarcode-marginbottom="15"
            jsbarcode-marginleft="5"
            jsbarcode-marginright="5"
            jsbarcode-flat="true"
            jsbarcode-valid=""
        >
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
