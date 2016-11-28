<?php
namespace Rakshazi;

class JustWiki
{
    const API_URL = 'https://api.vk.com/method/wall.get?owner_id=-70409438&filter=owner';
    const LIMIT = 10;
    public function __construct()
    {
        $this->curl = new \Curl\Curl;
    }

    protected function call($limit, $offset)
    {
        $this->curl->get(self::API_URL.'&limit='.$limit.'&offset='.$offset);

        return $this->curl->response->response;
    }

    public function get($page = 1)
    {
        $offset = ($page == 1) ? 0 : $page * self::LIMIT;
        $response = $this->call(self::LIMIT, $offset);
        $results = [];

        foreach ($response as $object) {
            if (
                is_object($object)
                && property_exists($object, 'attachment')
                && $object->attachment->type == 'photo'
                && property_exists($object->attachment->photo, 'src_xbig')
            ) {
                $results[] = ['url' => $object->attachment->photo->src_xbig, 'title' => $object->text];
            }
        }

        return $results;
    }
}
