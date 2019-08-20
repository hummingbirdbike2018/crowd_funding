
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
	el: '#app'
});



const payment = new Vue({
	el: '#payment',
	data: {
		show: false,
		select: true,
		number: '',
		message: '',
	},
	watch: {
		number: function(newKeyword, oldKeyword) {
			this.debouncedGetAnswer()
		}
	},
	created: function() {
		this.debouncedGetAnswer = _.debounce(this.numberCheck, 1000)
	},
	methods: {
		handler: function (event) {
			if (event.target.value === 'option1') {
				this.show = false
				this.select = true
			} else {
				this.show = true
				this.select = false
			}
		},
		numberCheck: function() {
			if(this.number === '') {
				this.message = ''
				return
			}
			var a, s, i, x;
			a = this.number.split("").reverse();
			s = 0;
			for (i = 0; i < a.length; i++) {
			x = a[i] * (1 + i % 2);
			s += x > 9 ? x - 9 : x;
			}
			if(s % 10 != 0) {
				this.message = 'カード番号が誤っています。番号をご確認ください。'
			} else {
				this.message = ''
			}
		}
	}
});
