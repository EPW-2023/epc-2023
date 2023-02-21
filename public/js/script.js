//Table To Excel Converter
function tableToExcel() {
  var table2excel = new Table2Excel()
  var table = document.getElementById('table')
  table2excel.export(table, 'applicants-data')
}
