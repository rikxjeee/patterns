<?php
class IronDoorExpert
{
    public function fixDoor(IronDoorInterface $door)
    {
        if (!($door instanceof IronDoorInterface)){
            throw new TypeError('This is not an iron door, i cant fix it.');
        }
        $door->fixWithRivetGun();
    }
}