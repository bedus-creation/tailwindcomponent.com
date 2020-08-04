import _ from 'lodash'
const session = {
    methods: {
        success: function (response) {
            this.$vToastify.success(response.data.message);
        },
        flashError: function (error) {
            if (error.response == undefined || error.response == '') return;
            let vm = this;
            if (error.response.status == 422) {
                _.forEach(error.response.data.errors, function (item) {
                    vm.$vToastify.error(item[0]);
                });
            }
            if (error.response.status == 404) {
                vm.$vToastify.error('404 ! Page Not Found');
            }

            if (error.response.status == 500) {
                vm.$vToastify.error('Internal Server Error.');
            }
        },
    }
}
export default session
