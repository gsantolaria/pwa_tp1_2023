<?php

/** @var yii\web\View $this */

use yii\web\View;

$this->title = 'Vue';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile(
    "https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js",
    ['position'=>View::POS_HEAD]
);

?>
<div class="site-vue">
    <div id="app">
        <h1>{{ message }}</h1>
        <hr>
        <input v-bind:placeholder="hint"><br>
        <button @click="mostrar = !mostrar">{{mostrar?'Ocultar':'Mostrar'}}</button>
        <span v-if="mostrar">Este texto se puede ocultar</span>
        <hr>

        <input placeholder="Musico" ref="musico" @keyup.enter="setFocus" v-model="nuevoMusico">
        <input placeholder="Discos" ref="discos" @keyup.enter="agregarMusico" v-model:number="nuevoDisco">
        <button @click="agregarMusico">+</button>

        <br>
        <ul>
            <li v-for="musico in musicos">
                {{musico.nombre}} - Discos: {{musico.discos}}
                <button @click="musico.discos++">+</button>
                <button @click="musico.discos--">-</button>
                <span v-if="musico.discos === 0">- Sin discos</span>
            </li>
        </ul>
        Total de discos:  {{totalDiscos}}
    </div>

    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!',
                hint: 'Ingrese su nombre',
                mostrar: false,
                nuevoMusico: '',
                nuevoDisco: 0,
                musicos: [
                    {nombre: 'Sting', discos: 48},
                    {nombre: 'U2', discos: 31},
                    {nombre: 'Pink Floyd', discos:15},
                    {nombre: 'The Beatles', discos: 17},
                ]
            },
            methods: {
                agregarMusico(){
                    this.musicos.push({
                        nombre: this.nuevoMusico,
                        discos: this.nuevoDisco
                    })
                    this.nuevoMusico='';
                    this.nuevoDisco=0;
                    this.$refs.musico.focus();
                },
                setFocus(){
                    this.$refs.discos.focus();
                    this.$refs.discos.select();
                }
            },
            computed: {
                totalDiscos(){
                    total = 0
                    for (musico of this.musicos){
                        total += parseInt(musico.discos);
                    }
                    return total;
                }
            }
        })
    </script>
</div>
