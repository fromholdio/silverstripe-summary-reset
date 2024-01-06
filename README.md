# silverstripe-summary-reset

Requires Silverstripe 4/5+

Occassionally it would be helpful to clear any configured $summary_fields declarations accumulated by a DataObject class and its ancestors.

This very simple module contains an extension `ResetSummaryFieldsExtension` which will do that for DataObjects it is applied to, and that class will then instead use only the $summary_fields declared on it directly.
