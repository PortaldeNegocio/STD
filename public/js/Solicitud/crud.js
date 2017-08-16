
Vue.component('v-select', VueSelect.VueSelect);


new Vue({
	el: '.content',
	created: function(){
		this.getAllCustomer();
	},
	components: {
  		Multiselect: window.VueMultiselect.default
	},
	data: {
		selectedCliente: '',
		searchKey: '',
		allClientes: [],
	},
	methods: {
		getAllCustomer: function(){
			axios.get('/getAllCustomer').then(response => {
				this.allClientes = response.data;
			});
		},
	  	customLabel:function(option) {
		    return `${option.Nombre}  ${option.Apellido}`
    	}
	},

});
