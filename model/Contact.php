<?php

class Contact extends Connection{
    public function inserts($datas){
        $sth = $this->conn->prepare("INSERT INTO contact SET firstname=:firstname, surname=:surname, email=:email, message=:message");
        $sth->execute(array(
            'firstname' => $datas['firstname'],
            'surname'   => $datas['surname'],
            'email'     => $datas['email'],
            'message'   => $datas['message']
        ));
    }
}