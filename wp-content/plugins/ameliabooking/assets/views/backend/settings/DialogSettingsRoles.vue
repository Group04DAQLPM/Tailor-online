<template>
  <div>

    <div class="am-dialog-scrollable">

      <!-- Dialog Header -->
      <div class="am-dialog-header">
        <el-row>
          <el-col :span="20">
            <h2>{{ $root.labels.roles_settings }}</h2>
          </el-col>
          <el-col :span="4" class="align-right">
            <el-button @click="closeDialog" class="am-dialog-close" size="small" icon="el-icon-close"></el-button>
          </el-col>
        </el-row>
      </div>
      <!-- /Dialog Header -->

      <!-- Form -->
      <el-form :model="settings" ref="settings" :rules="rules" label-position="top" @submit.prevent="onSubmit">
        <el-tabs v-model="rolesTab">

          <!-- Employee -->
          <el-tab-pane :label="$root.labels.employee" name="employee">
            <BlockLite/>
            <br>
            <!-- Allow employees managing their services -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_configure_services }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowConfigureServices"
                      active-text=""
                      inactive-text=""
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees managing their services -->

            <!-- Allow employees configuring their own schedule -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_configure_schedule }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowConfigureSchedule"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees configuring their own schedule -->

            <!-- Allow employees configuring their own days off -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_configure_days_off }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowConfigureDaysOff"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees configuring their own days off -->

            <!-- Allow employees configuring their own special days -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_configure_special_days }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowConfigureSpecialDays"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees configuring their own special days -->

            <!-- Default allow provider add/edit appointment -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_write_appointments }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowWriteAppointments"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees managing their appointments -->

            <!-- Allow employees managing their events -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_write_events }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowWriteEvents"
                      active-text=""
                      inactive-text=""
                      :disabled=$root.isLite
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow employees managing their events -->

            <!-- Enable Employee Cabinet -->
            <div class="am-setting-box am-switch-box" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.enable_employee_cabinet }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.providerCabinet.enabled"
                      active-text=""
                      inactive-text=""
                      :disabled=$root.isLite
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Enable Employee Cabinet -->

            <!-- Enable Employee Cabinet URL -->
            <el-form-item
              v-show="settings.providerCabinet.enabled"
              prop="providerCabinet.pageUrl"
              :class="{'am-lite-disabled': ($root.isLite)}"
            >
              <label slot="label">
                {{ $root.labels.employee_cabinet }}:
                <el-tooltip placement="top">
                  <div slot="content" v-html="$root.labels.employee_cabinet_tooltip"></div>
                  <i class="el-icon-question am-tooltip-icon"></i>
                </el-tooltip>
              </label>
              <el-input v-model="settings.providerCabinet.pageUrl" auto-complete="off"  @input="clearValidation" :disabled=$root.isLite />
            </el-form-item>
            <!-- Enable Employee Cabinet URL -->

          </el-tab-pane>
          <!-- /Employee -->

          <!-- Customer -->
          <el-tab-pane :label="$root.labels.customer" name="customer">

            <!-- Check customer's name for existing email when booking -->
            <div class="am-setting-box am-switch-box">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.inspect_customer_info }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.inspect_customer_info_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.inspectCustomerInfo"
                      active-text=""
                      inactive-text=""
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Check customer's name for existing email when booking -->

            <!-- Automatically create Amelia Customer user -->
            <div class="am-setting-box am-switch-box">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.automatically_create_customer }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.automatically_create_customer_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.automaticallyCreateCustomer"
                      active-text=""
                      inactive-text=""
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Automatically create Amelia Customer user -->

            <!-- Allow customers rescheduling their appointments -->
            <div class="am-setting-box am-switch-box">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_customer_reschedule }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.allow_customer_reschedule_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowCustomerReschedule"
                      active-text=""
                      inactive-text=""
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Allow customers rescheduling their appointments -->
            <el-popover :disabled="!$root.isLite" ref="allowCustomerReschedule" v-bind="$root.popLiteProps"><PopLite/></el-popover>
            <div class="am-setting-box am-switch-box" v-popover:allowCustomerReschedule :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.enable_customer_cabinet }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.customerCabinet.enabled"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Enable Customer Cabinet -->

            <!-- Require Password -->
            <div class="am-setting-box am-switch-box" v-show="settings.customerCabinet.enabled" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.require_cabinet_password }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.require_cabinet_password_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.customerCabinet.loginEnabled"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Require Password -->

            <!-- Allow customers to delete personal info -->
            <div class="am-setting-box am-switch-box" v-show="settings.customerCabinet.enabled" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_customer_delete_profile }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.allow_customer_delete_profile_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowCustomerDeleteProfile"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Allow customers to delete personal info -->

            <!-- Allow customers to cancel packages -->
            <div class="am-setting-box am-switch-box" v-show="settings.customerCabinet.enabled && ($root.licence.isPro || $root.licence.isDeveloper)" :class="{'am-lite-disabled': ($root.isLite)}">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="20">
                  {{ $root.labels.allow_customer_cancel_packages }}
                </el-col>
                <el-col :span="4" class="align-right">
                  <el-switch
                      v-model="settings.allowCustomerCancelPackages"
                      active-text=""
                      inactive-text=""
                      :disabled="$root.isLite"
                  >
                  </el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- Allow customers to cancel packages -->

            <!-- Customer Cabinet URL -->
            <el-form-item
              v-show="settings.customerCabinet.enabled"
              prop="customerCabinet.pageUrl"
              :class="{'am-lite-disabled': ($root.isLite)}"
            >
              <label slot="label">
                {{ $root.labels.customer_cabinet }}:
                <el-tooltip placement="top">
                  <div slot="content" v-html="$root.labels.customer_cabinet_tooltip"></div>
                  <i class="el-icon-question am-tooltip-icon"></i>
                </el-tooltip>
                <div class="am-service-translate" @click="showDialogTranslate()">
                  <img class="am-dialog-translate-svg" width="16px" :src="$root.getUrl+'public/img/translate.svg'">
                  {{ $root.labels.manage_languages }}
                </div>
              </label>
              <el-input v-model="settings.customerCabinet.pageUrl" auto-complete="off" @input="clearValidation" :disabled="$root.isLite"/>
            </el-form-item>
            <!-- Customer Cabinet URL -->

            <!-- Limit Appointments per Customer -->
            <div class="am-setting-box am-switch-box">
              <el-row :class="{'am-lite-disabled': ($root.isLite)}" type="flex" align="middle" :gutter="24">
                <el-col :span="19">
                  {{ $root.labels.limit_app_per_customer }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.limit_app_per_customer_tt"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="5" class="align-right">
                  <el-switch v-model="settings.limitPerCustomerService.enabled" :disabled="$root.isLite"></el-switch>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerService.enabled">
                <el-col>
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.number_of_appointments }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerService.numberOfApp"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerService.enabled">
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.time_frame }}:
                    </label>
                    <el-select
                      v-model="settings.limitPerCustomerService.timeFrame"
                      placeholder=""
                    >
                      <el-option
                        v-for="timeFrame in limitPerCustomerTimeFrames"
                        :key="timeFrame.value"
                        :label="timeFrame.label"
                        :value="timeFrame.value"
                      >
                      </el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.period }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerService.period"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>

              <el-row v-if="settings.limitPerCustomerService.enabled" :gutter="24" style="margin-top: 10px; display: flex; align-items: baseline;">
                <el-col :span="12">
                  {{ $root.labels.limit_app_per_customer_from }}:
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.limit_app_per_customer_from_tt"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="12">
                  <el-select
                    v-model="settings.limitPerCustomerService.from"
                  >
                    <el-option
                      v-for="option in limitPerCustomerFrom.appointment"
                      :key="option.value"
                      :label="option.label"
                      :value="option.value"
                    >
                    </el-option>
                  </el-select>
                </el-col>
              </el-row>

            </div>

            <!-- Limit Packages per Customer -->
            <div class="am-setting-box am-switch-box" v-if="$root.licence.isPro || $root.licence.isDeveloper">
              <el-row :class="{'am-lite-disabled': ($root.isLite)}" type="flex" align="middle" :gutter="24">
                <el-col :span="19">
                  {{ $root.labels.limit_package_per_customer }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.limit_package_per_customer_tt"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="5" class="align-right">
                  <el-switch v-model="settings.limitPerCustomerPackage.enabled" :disabled="$root.isLite"></el-switch>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerPackage.enabled">
                <el-col>
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.number_of_packages }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerPackage.numberOfApp"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerPackage.enabled">
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.time_frame }}:
                    </label>
                    <el-select
                      v-model="settings.limitPerCustomerPackage.timeFrame"
                      placeholder=""
                    >
                      <el-option
                        v-for="timeFrame in limitPerCustomerTimeFrames"
                        :key="timeFrame.value"
                        :label="timeFrame.label"
                        :value="timeFrame.value"
                      >
                      </el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.period }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerPackage.period"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>
            </div>


            <!-- Limit Appointments per Customer for Events -->
            <div class="am-setting-box am-switch-box">
              <el-row :class="{'am-lite-disabled': ($root.isLite)}" type="flex" align="middle" :gutter="24">
                <el-col :span="19">
                  {{ $root.labels.limit_events_per_customer }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.limit_events_per_customer_tt"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="5" class="align-right">
                  <el-switch v-model="settings.limitPerCustomerEvent.enabled" :disabled="$root.isLite"></el-switch>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerEvent.enabled">
                <el-col>
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.number_of_events }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerEvent.numberOfApp"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>

              <el-row :gutter="24" v-if="settings.limitPerCustomerEvent.enabled">
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.time_frame }}:
                    </label>
                    <el-select
                      v-model="settings.limitPerCustomerEvent.timeFrame"
                      placeholder=""
                    >
                      <el-option
                        v-for="timeFrame in limitPerCustomerTimeFrames"
                        :key="timeFrame.value"
                        :label="timeFrame.label"
                        :value="timeFrame.value"
                      >
                      </el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="12">
                  <el-form-item>
                    <label slot="label">
                      {{ $root.labels.period }}:
                    </label>
                    <el-input-number :min="1" v-model="settings.limitPerCustomerEvent.period"></el-input-number>
                  </el-form-item>
                </el-col>
              </el-row>


              <el-row v-if="settings.limitPerCustomerEvent.enabled" :gutter="24" style="margin-top: 10px;display: flex; align-items: baseline;">
                <el-col :span="12">
                  {{ $root.labels.limit_events_per_customer_from }}:
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.limit_events_per_customer_from_tt"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="12">
                  <el-select
                    v-model="settings.limitPerCustomerEvent.from"
                  >
                    <el-option
                      v-for="option in limitPerCustomerFrom.event"
                      :key="option.value"
                      :label="option.label"
                      :value="option.value"
                    >
                    </el-option>
                  </el-select>
                </el-col>
              </el-row>

            </div>

          </el-tab-pane>
          <!-- /Customer -->

          <!-- Admin -->
          <el-tab-pane :label="$root.labels.admin" name="admin">

            <!-- Allow admin to book at any time -->
            <div class="am-setting-box am-switch-box">
              <el-row type="flex" align="middle" :gutter="24">
                <el-col :span="16">
                  {{ $root.labels.allow_admin_book_at_any_time }}
                  <el-tooltip placement="top">
                    <div slot="content" v-html="$root.labels.allow_admin_book_at_any_time_tooltip"></div>
                    <i class="el-icon-question am-tooltip-icon"></i>
                  </el-tooltip>
                </el-col>
                <el-col :span="8" class="align-right">
                  <el-switch
                      v-model="settings.allowAdminBookAtAnyTime"
                      active-text=""
                      inactive-text=""
                  ></el-switch>
                </el-col>
              </el-row>
            </div>
            <!-- /Allow admin to book at any time -->

          </el-tab-pane>
          <!-- /Admin -->


        </el-tabs>
      </el-form>
      <!-- /Form -->

    </div>

    <!-- Dialog Footer -->
    <div class="am-dialog-footer">
      <div class="am-dialog-footer-actions">
        <el-row>
          <el-col :sm="24" class="align-right">
            <el-button type="" @click="closeDialog" class="">{{ $root.labels.cancel }}</el-button>
            <el-button type="primary" @click="onSubmit" class="am-dialog-create">{{ $root.labels.save }}</el-button>
          </el-col>
        </el-row>
      </div>
    </div>
    <!-- /Dialog Footer -->

  </div>
</template>

<script>
  import imageMixin from '../../../js/common/mixins/imageMixin'

  export default {

    mixins: [imageMixin],

    props: {
      roles: {
        type: Object
      }
    },

    data () {
      let validateCustomerCabinetURL = (rule, input, callback) => {
        let currentURL = this.settings.customerCabinet.pageUrl
        let panelEnabled = this.settings.customerCabinet.enabled && !this.$root.isLite
        let regex = /^((http|https):\/\/)/
        if (panelEnabled && (!regex.test(currentURL) || currentURL === '')) {
          this.rolesTab = 'customer'
          callback(new Error(this.$root.labels.enter_valid_url_warning))
        } else {
          callback()
        }
      }

      let validateEmployeeCabinetURL = (rule, input, callback) => {
        let currentURL = this.settings.providerCabinet.pageUrl
        let panelEnabled = this.settings.providerCabinet.enabled && !this.$root.isLite
        let regex = /^((http|https):\/\/)/
        if (panelEnabled && (!regex.test(currentURL) || currentURL === '')) {
          this.rolesTab = 'employee'
          callback(new Error(this.$root.labels.enter_valid_url_warning))
        } else {
          callback()
        }
      }

      return {
        rolesTab: 'employee',
        rules: {
          'customerCabinet.pageUrl': [
            {required: true, validator: validateCustomerCabinetURL, trigger: 'submit'}
          ],
          'providerCabinet.pageUrl': [
            {required: true, validator: validateEmployeeCabinetURL, trigger: 'submit'}
          ]
        },
        settings: Object.assign({}, this.roles),
        limitPerCustomerFrom: {
          appointment: [
            {
              label: this.$root.labels.limit_app_date_booked,
              value: 'dateBooked'
            },
            {
              label: this.$root.labels.limit_app_booking_date,
              value: 'bookingDate'
            }
          ],
          event: [
            {
              label: this.$root.labels.limit_events_date_booked,
              value: 'dateBooked'
            },
            {
              label: this.$root.labels.limit_events_booking_date,
              value: 'bookingDate'
            }
          ],
        },
        limitPerCustomerTimeFrames: [
          {
            label: this.$root.labels.hour,
            value: 'hour'
          },
          {
            label: this.$root.labels.day,
            value: 'day'
          },
          {
            label: this.$root.labels.week,
            value: 'week'
          },
          {
            label: this.$root.labels.month,
            value: 'month'
          },
          {
            label: this.$root.labels.year,
            value: 'year'
          }
        ],
      }
    },

    updated () {
      this.inlineSVG()
    },

    mounted () {
      this.inlineSVG()
    },

    methods: {
      closeDialog () {
        this.$emit('closeDialogSettingsRoles')
      },

      clearValidation () {
        this.$refs.settings.clearValidate()
      },

      onSubmit () {
        this.$refs.settings.validate((valid) => {
          if (valid) {
            this.$emit('closeDialogSettingsRoles')
            this.$emit('updateSettings', {'roles': this.settings})
          } else {
            return false
          }
        })
      },

      showDialogTranslate () {
        this.$emit('showDialogTranslate', this.$root.labels.customer_cabinet)
      }
    }
  }
</script>
