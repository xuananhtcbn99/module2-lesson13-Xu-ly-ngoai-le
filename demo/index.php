<?php

//getMessage(): thong bao ra loi ma ban gap phai
//getCode(): lay ma~ exception
//getFile(): lay tep trong do ngoai le duoc tao
//getLine(): lay dong trong do ngoai le duoc tao

try {
//throw: khoi tao ngoai le
    throw new Exception("Loi cua ban xay ra");

} catch (Exception $e) {
    echo "Loi: ".$e->getMessage();
}

try {
//throw: khoi tao ngoai le
    throw new Exception("Ma~ loi cua ban",30);

} catch (Exception $e) {
    echo "Loi: ".$e->getCode();
}

try {
//throw: khoi tao ngoai le
    throw new Exception;

} catch (Exception $e) {
    echo "Loi: ".$e->getFile();
}
//in ra file ma exception duoc tao


try {
//throw: khoi tao ngoai le
    throw new Exception("Loi cua ban xay ra");

} catch (Exception $e) {
    echo "Loi: ".$e->getLine();
}