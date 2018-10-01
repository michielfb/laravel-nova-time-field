<template>
    <panel-item :field="field" />
</template>

<script>
export default {
    props: ['field'],
}
</script>

<template>
    <panel-item :field="field">
        <template slot="value">
            <p v-if="field.value" class="text-90">{{ formattedDate }}</p>
            <p v-else>&mdash;</p>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['field'],

    computed: {
        formattedDate() {
            return moment(this.field.value, 'HH:mm:ss').format(this.field.format);
        }
    }
}
</script>
