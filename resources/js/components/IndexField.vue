<template>
    <span class="whitespace-no-wrap">{{ formattedDate }}</span>
</template>

<script>
export default {
    props: ['field'],

    computed: {
        formattedDate() {
            return this.field.value
                ? moment(this.field.value, 'HH:mm:ss').format(this.field.format)
                : '-';
        }
    }
}
</script>