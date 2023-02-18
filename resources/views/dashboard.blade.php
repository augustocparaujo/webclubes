<x-app-layout>
    <x-slot name="title">
        {{ __('Dashboard') }}
    </x-slot>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    $('.dashboard').addClass('active');

//script grafico
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawVisualization);

  function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var data = google.visualization.arrayToDataTable([
      ['Month', 'Associado', 'Desligado', 'Novo'],
      ['Janeiro',  165,      938,         522],
      ['Fevereiro',  135,      1120,        599],
      ['Marco',  157,      1167,        587],
      ['Abril',  139,      1110,        615],
      ['Maio',  136,      691,         629]
    ]);

    var options = {
      title : 'Gráfico de associado',
      vAxis: {title: 'Total'},
      hAxis: {title: 'Mês'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>


<div class="row">
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#5D9CEC" class="pull-left light"></div>
            <div style="background-color:#4A89DC" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>ASSOCIADOS</h4>
            <p>10000</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#4FC1E9" class="pull-left light"></div>
            <div style="background-color:#3BAFDA" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>DEPENDENTES</h4>
            <p>20000</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#48CFAD" class="pull-left light"></div>
            <div style="background-color:#37BC9B" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>COBRANÇAS</h4>
            <p>R$ 1.500.000,00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#A0D468" class="pull-left light"></div>
            <div style="background-color:#8CC152" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>RECEBIDO</h4>
            <p>R$ 500.000,00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#FFCE54" class="pull-left light"></div>
            <div style="background-color:#F6BB42" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>A RECEBER</h4>
            <p>R$ 1.000.000,00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="color-swatches">
        <div class="swatches">
          <div class="clearfix">
            <div style="background-color:#FC6E51" class="pull-left light"></div>
            <div style="background-color:#E9573F" class="pull-right dark"></div>
          </div>
          <div class="infos">
            <h4>VENCIDO</h4>
            <p>R$ 235.000,00</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
<div id="chart_div" style="width: 100%; height: 400px; border: 1px solid gray; border-radius: 5px"></div>
</div>
</x-app-layout>
