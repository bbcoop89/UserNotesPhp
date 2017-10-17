<?php
/**
 * Created by PhpStorm.
 * User: brittanyreves
 * Date: 10/16/17
 * Time: 7:16 PM
 */

namespace Brit\UserNoteService\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Note
 * @package Brit\UserNoteService\Entities
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="Brit\UserNoteService\Repositories\NoteRepository")
 */
class Note implements \JsonSerializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="note_id", type="integer", nullable=false, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=1000, nullable=false)
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\Column(name="note_create_time", type="time", nullable=false)
     */
    private $create;

    /**
     * @var int
     *
     * @ORM\Column(name="note_last_update_time", type="time", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="Brit\UserNoteService\Entities\User", inversedBy="notes")
     * @ORM\JoinColumn(name="id", referencedColumnName="user_id")
     */
    private $user;

    /**
     * Note constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreate()
    {
        return $this->create;
    }

    /**
     * @param int $create
     */
    public function setCreate($create)
    {
        $this->create = $create;
        return $this;
    }

    /**
     * @return int
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * @param int $lastUpdate
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }


    /**
     * @return \stdClass
     */
    function jsonSerialize()
    {
        $note = new \stdClass();

        $note->id = $this->id;
        $note->title = $this->title;
        $note->note = $this->note;
        $note->create = $this->create;
        $note->lastUpdate = $this->lastUpdate;
        $note->user = $this->user;

        return $note;

    }

}