<?php

/** @var yii\web\View $this */

use yii\web\View;

$this->title = 'Vue2';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    "https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js",
    ['position'=>View::POS_HEAD]
);

?>
<div class="site-vue2">
    <div id="app" class="container mt-3">
        <p :class="[tipotexto, 'bg-danger']">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti inventore sed officia deserunt. Ut inventore vel molestias cumque ad, quaerat vitae dicta possimus necessitatibus earum aut aliquid, alias iusto blanditiis.
        </p>
        <p :class="{'bg-info': !es_info, 'text-primary': es_info}">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti inventore sed officia deserunt. Ut inventore vel molestias cumque ad, quaerat vitae dicta possimus necessitatibus earum aut aliquid, alias iusto blanditiis.
        </p>

        <button class="btn btn-primary" @click="es_info = !es_info">change</button>

        <hr>

        <div class="form-group">
            <label for="cmbPermisos">Permisos</label>
            <select class="form-control" id="cmbPermisos" v-model="permisos.selected">
                <option v-for="permiso in permisos.data" v-bind:value="permiso.id">
                    {{ permiso.descripcion }}
                </option>
            </select>
            <span>Seleccionado: {{ permisos.selected }}</span>
        </div>

    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
               tipotexto: 'text-info',
               es_info: true,
            },
            methods: {
                
            },
            computed: {
                
            },
            mounted(){
                console.log("mounted");
            }
        })
    </script>
</div>
