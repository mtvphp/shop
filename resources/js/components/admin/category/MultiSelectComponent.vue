<template>
    <div>
        <label class="typo__label">Tagging</label>
        <multiselect v-model="value" searchable="false"
                     placeholder="Select a category" label="title"
                     track-by="id" :options="options" :multiple="true">

        </multiselect>
        <pre class="language-json"><code>{{ value  }}</code></pre>
    </div>
</template>

<script>
    import Multiselect from 'vue-multiselect'

    export default {
        components: {
            Multiselect
        },
        props: {
            categories: Array
        },

        data () {
            return {
                value: '',
                options: this.categories
            }
        }
    }
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>


