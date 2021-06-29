<script>
import { Line } from "vue-chartjs";

export default {
  extends: Line,
  props: {
    label: {
      type: String,
    },
    chartData: {
      type: Array,
    },
    options: {
      type: Object,
    },
  },
  mounted() {
    const dates = this.chartData.map((d) => d.date);
    const totals = this.chartData.map((d) => d.total);

    console.log(this.chartData);
    console.log(dates);

    this.renderChart(
      {
        label: dates,
        dataset: [
          {
            label: this.label,
            data: totals,
          },
        ],
      },
      this.options
    );
  },
};
</script>
