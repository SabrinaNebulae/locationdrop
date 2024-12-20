import Alpine from 'alpinejs';

Alpine.start();

window.selectLocation = function(region, department, commune) {
    return {
        region: region,
        department: department,
        commune: commune,
        communeSelected: function(value) {
            this.commune = value;
        }
    }
}
