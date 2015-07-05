<?

define("FILE_OF_STORE", "idOperator.txt");

function putNewId() {
    file_put_contents($file, $current);
}

function getId() {
    return file_get_contents(FILE_OF_STORE, FILE_USE_INCLUDE_PATH);
}

echo getId();

?>

