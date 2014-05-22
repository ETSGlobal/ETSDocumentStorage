<?php

namespace ETS\DocumentStorage\Client;

interface DocumentStorage
{
    /**
     * @param resource|string $pathOrBody
     * @param string          $docName  the name of the file once uploaded
     * @param string          $docKey
     *
     * @return string the document key
     */
    public function upload($pathOrBody, $docName = null, $docKey = null);

    /**
     * @param  string $docKey
     */
    public function download($docKey);

    /**
     * @param  string $docKey
     *
     * @return string
     *
     * @throws ETS\DocumentStorage\Exception\DocumentNotFoundException If no document is found
     */
    public function getDownloadLink($docKey);
}
