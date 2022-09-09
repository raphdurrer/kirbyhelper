import AccordionBlock from "./components/AccordionBlock.vue";
import TeamBlock from "./components/TeamBlock.vue";

panel.plugin("docono/kirbyhelper", {
    blocks: {
        accordion: AccordionBlock,
        team: TeamBlock
    }
});