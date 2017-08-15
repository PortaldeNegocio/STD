new Vue({
	el:'.container',
	created: function(){
		this.findSolicitudEstudio(this.id);
	},
	data: {
		id: 3,
		solicitudEstudio: '',
		currentPage: ''
	},
	methods: {
		findSolicitudEstudio: function(param){
			axios.get('findSolicitudEstudio/'+param).then(response => {
				this.solicitudEstudio = response.data;
			});
		},
		selectTab: function(e){
			if(this.currentPage == e)
				this.currentPage="";
			else
				this.currentPage = e;
		},		
		newOrdenTrabajo: function(e){
			var ordenTrabajo = {
				id:0,
				solicitud_estudio_id:this.id,
				UsuarioIdAutorizado: 0,
				UsuarioIdResponsable: 0,
				Descripcion: '',
				Fecha:new Date(),
				RecibidoPor: '',
				Estado: 'En Espera',
				Observacion : '',
				Extras: '0.00',
				created_at: new Date(),
				updated_at: new Date(),
				trabajo_campo:''
			};
			this.solicitudEstudio.ordenes_trabajo.push(ordenTrabajo);
			this.currentPage="#collapseOrdenTrabajo0";
		}

	}

})