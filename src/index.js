import AccordionBlock from "./components/AccordionBlock.vue";
import TeamBlock from "./components/TeamBlock.vue";

panel.plugin("raphdurrer/kirbyhelper", {
    blocks: {
        accordion: AccordionBlock,
        team: TeamBlock
    }
});