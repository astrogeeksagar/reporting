function dmy(dateString) {
    var parts = dateString.split('-');
    var newDate = parts[2] + '-' + parts[1] + '-' + parts[0];
    return newDate;
}