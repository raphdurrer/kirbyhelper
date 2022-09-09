<template>
  <div>
    <k-grid v-if="useglobalteam">
      <k-column width="4/12" v-for="item in blockitems" v-bind:key="item.id">
        <k-image
          :src="item.portrait[0].url"
          width="365"
          height="260"
          ratio="3/2"
          cover="true"
          v-if="item.portrait[0]"
        />
        <k-headline>
          {{ item.name }}
        </k-headline>
        <k-text>
          {{ item.function }} <br />
          {{ item.email }} <br />
          {{ item.phone }}
        </k-text>
      </k-column>
    </k-grid>
    <k-grid v-else>
      <k-column width="12/12">
        <k-info-field
          label="Team"
          text="Das Team wird von den Seiteneinstellungen geladen und kann auch dort
          geändert werden."
        />
      </k-column>
    </k-grid>
  </div>
</template>

<script>
export default {
  data() {
    return {
      useglobalteam: this.content.useglobalteam,
    };
  },
  computed: {
    blockitems() {
      return this.content.teammembers || {};
    },
  },
};
</script>