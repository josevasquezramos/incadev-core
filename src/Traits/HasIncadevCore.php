<?php

namespace Incadev\Core\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Incadev\Core\Models\Application;
use Incadev\Core\Models\Appointment;
use Incadev\Core\Models\Audit;
use Incadev\Core\Models\AuditAction;
use Incadev\Core\Models\Availability;
use Incadev\Core\Models\Certificate;
use Incadev\Core\Models\Comment;
use Incadev\Core\Models\Contract;
use Incadev\Core\Models\Conversation;
use Incadev\Core\Models\Enrollment;
use Incadev\Core\Models\Group;
use Incadev\Core\Models\Message;
use Incadev\Core\Models\Offer;
use Incadev\Core\Models\StudentProfile;
use Incadev\Core\Models\SupportProfile;
use Incadev\Core\Models\SurveyResponse;
use Incadev\Core\Models\TeacherProfile;
use Incadev\Core\Models\TechAsset;
use Incadev\Core\Models\Thread;
use Incadev\Core\Models\Ticket;
use Incadev\Core\Models\TicketReply;
use Incadev\Core\Models\Vote;

trait HasIncadevCore
{
    public function studentProfile(): HasOne
    {
        return $this->hasOne(StudentProfile::class);
    }

    public function teacherProfile(): HasOne
    {
        return $this->hasOne(TeacherProfile::class);
    }

    public function supportProfile(): HasOne
    {
        return $this->hasOne(SupportProfile::class);
    }

    public function surveyResponses(): HasMany
    {
        return $this->hasMany(SurveyResponse::class);
    }

    public function conversations(): BelongsToMany
    {
        return $this->belongsToMany(
            Conversation::class,
            'conversation_users',
            'user_id',
            'conversation_id'
        )->withTimestamps();
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function groupsAsTeacher(): BelongsToMany
    {
        return $this->belongsToMany(
            Group::class,
            'group_teachers',
            'user_id',
            'group_id'
        )->withTimestamps();
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function groupsAsStudent(): HasManyThrough
    {
        return $this->hasManyThrough(Group::class, Enrollment::class, 'user_id', 'id', 'id', 'group_id');
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    public function contracts(): HasMany
    {
        return $this->hasMany(Contract::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function offersAppliedTo(): BelongsToMany
    {
        return $this->belongsToMany(
            Offer::class,
            'applications',
            'user_id',
            'offer_id'
        )->withPivot('cv_path', 'status', 'created_at');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticketReplies(): HasMany
    {
        return $this->hasMany(TicketReply::class);
    }

    public function techAssets(): HasMany
    {
        return $this->hasMany(TechAsset::class);
    }

    public function availabilities(): HasMany
    {
        return $this->hasMany(Availability::class);
    }

    public function appointmentsAsTeacher(): HasMany
    {
        return $this->hasMany(Appointment::class, 'teacher_id');
    }

    public function appointmentsAsStudent(): HasMany
    {
        return $this->hasMany(Appointment::class, 'student_id');
    }

    public function threads(): HasMany
    {
        return $this->hasMany(Thread::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    public function auditsAsAuditor(): HasMany
    {
        return $this->hasMany(Audit::class, 'auditor_id');
    }

    public function auditActionsResponsibleFor(): HasMany
    {
        return $this->hasMany(AuditAction::class, 'responsible_id');
    }
}
