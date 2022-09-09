<template>
  <k-grid>
    <k-column width="12/12" v-for="item in items" v-bind:key="item.id">
      {{ item.title }}
      <hr />
    </k-column>
  </k-grid>
</template>
<script>
export default {
  computed: {
    items() {
      return this.content.accordion || {};
    },
  },
};
</script>

<style scoped>
.k-grid{
  row-gap: 0.5em;
}

hr {
  margin-block-start: 1em;
}
</style>