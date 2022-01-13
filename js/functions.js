document.addEventListener('DOMContentLoaded', function () {

    //Gráfica Bananas
    $.post('servidor.php', { peticion: 0 }, function (data) {
        bananaLoad(data);
    });

    //Gráfica Población
    $.post('servidor.php', { peticion: 1 }, function (data) {
        populationLoad(data);
    });

    //Gráfica Ventas
    $.post('servidor.php', { peticion: 2 }, function (data) {
        ventasLoad(data);
    });

    function bananaLoad(datos) {
        var obj = JSON.parse(datos);
        var data = [];
        for (let i = 0; i < obj.length; i++) {
            data.push({
                name: obj[i].Nutrients,
                y: parseInt(obj[i].Grams)
            });
        }

        var clrs = Highcharts.getOptions().colors;
        var pieColors = [clrs[2], clrs[0], clrs[3], clrs[1], clrs[4]];

        // Get a default pattern, but using the pieColors above.
        // The i-argument refers to which default pattern to use
        function getPattern(i) {
            return {
                pattern: Highcharts.merge(Highcharts.patterns[i], {
                    color: pieColors[i]
                })
            };
        }

        // Get 5 patterns
        var patterns = [0, 1, 2, 3, 4].map(getPattern);

        var chart = Highcharts.chart('banana', {
            chart: {
                type: 'pie'
            },

            title: {
                text: 'Nutrients in a Banana'
            },

            subtitle: {
                text: 'Source: Wikipedia'
            },

            colors: patterns,

            tooltip: {
                valueSuffix: '%',
                borderColor: '#8ae'
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        connectorColor: '#777',
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    },
                    cursor: 'pointer',
                    borderWidth: 3
                }
            },

            series: [{
                name: 'Total percentage',
                data: data
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        plotOptions: {
                            series: {
                                dataLabels: {
                                    format: '<b>{point.name}</b>'
                                }
                            }
                        }
                    }
                }]
            }
        });

        // Toggle patterns enabled
        document.getElementById('patterns-enabled').onclick = function () {
            chart.update({
                colors: this.checked ? patterns : pieColors
            });
        };
    }


    function populationLoad(datos) {
        var obj = JSON.parse(datos);
        var categories = [];
        var populations = [];
        for (let i = 0; i < obj.length; i++) {
            categories.push(obj[i].country);
            populations.push(parseInt(obj[i].population))
        }

        Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Los cincos países más poblados del mundo'
            },
            subtitle: {
                text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
            },
            xAxis: {
                categories: categories,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor:
                    Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Población',
                data: populations
            }]
        });
    }

    function ventasLoad(datos) {
        var obj = JSON.parse(datos);
        var ventas = [];
        var gastos = [];
        for (let i = 0; i < obj.length; i++) {
            ventas.push(parseInt(obj[i].Ventas));
            gastos.push(parseInt(obj[i].Gastos));
        }

        Highcharts.chart('ventas', {

            title: {
                text: 'Comparisión Ventas-Gastos EmpresaX'
            },

            yAxis: {
                title: {
                    text: 'Cantidad en Euros'
                }
            },

            xAxis: {
                title: {
                    text: 'Mes del año'
                },
                accessibility: {
                    rangeDescription: 'Range: 1 to 12'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 1
                }
            },

            series: [{
                name: 'Ventas',
                data: ventas
            }, {
                name: 'Gastos',
                data: gastos
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    }
});

