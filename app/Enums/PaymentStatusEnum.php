<?php

namespace App\Enums;
enum PaymentStatusEnum: int
{
    case PENDING = 1;
    case PAID = 2;
    case REJECTED = 3;
    case AUTHORIZED = 4;
    case IN_PROCESS = 5;
    case IN_MEDIATION = 6;
    case CHARGED_BACK = 7;
    case REFUNDED = 8;
    case CANCELLED = 9;


    public function getName() {
        return match ($this) {
            self::PENDING => 'Pendente',
            self::PAID => 'Pago',
            self::REJECTED => 'Rejeitado',
            self::AUTHORIZED => 'Autorizado',
            self::IN_PROCESS => 'Em processo',
            self::IN_MEDIATION => 'Em disputa',
            self::CHARGED_BACK => 'Charge Back',
            self::REFUNDED => 'Reembolsado',
            self::CANCELLED => 'Cancelado',
            default => 'Status não encontrado'
        };
    }

    public function getStyles(): string
    {
        return match ($this) {
            self::PENDING => 'px-2 py-0.5 text-xs rounded-full bg-yellow-100 text-yellow-800',
            self::PAID => 'px-2 py-1 r text-xs rounded-full bg-green-100 text-green-800',
            self::REJECTED => 'px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-800',
            self::AUTHORIZED => 'px-2 py-0.5 text-xs rounded-full bg-blue-100 text-blue-800',
            self::IN_PROCESS => 'px-2 py-0.5 text-xs rounded-full bg-blue-100 text-blue-800',
            self::IN_MEDIATION => 'px-2 py-0.5 text-xs rounded-full bg-blue-100 text-blue-800',
            self::CHARGED_BACK => 'px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-800',
            self::REFUNDED => 'px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-800',
            self::CANCELLED => 'px-2 py-0.5 text-xs rounded-full bg-red-100 text-red-800',
            default => ''
        };
    }

    public static function parse($status) {
        switch ($status) {
            case 'pending':
                return self::PENDING;
            case 'approved':
                return self::PAID;
            case 'rejected':
                return self::REJECTED;
            case 'authorized':
                return self::AUTHORIZED;
            case 'in_process':
                return self::IN_PROCESS;
            case 'in_mediation':
                return self::IN_MEDIATION;
            case 'charged_back':
                return self::CHARGED_BACK;
            case 'cancelled':
                return self::CANCELLED;
            case 'refunded':
                return self::REFUNDED;
            default:
                return null;
        }
    }
}
